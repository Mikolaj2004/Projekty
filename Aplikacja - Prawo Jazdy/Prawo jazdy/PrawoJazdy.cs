using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.IO;

namespace Prawo_jazdy
{
    public partial class Prawo_Jazdy : Form
    {
        Random generator = new Random();
        List<string> pytania_stand = File.ReadLines("Data\\pytania_stand.txt").ToList();
        List<string> pytania_spec = File.ReadLines("Data\\pytania_spec.txt").ToList();
        List<string> pytania = new List<string>();

        int a;
        int punkty = 0;
        int nr_pytania;
        int h = 00;
        int m = 00;
        int s = 25;
        System.Timers.Timer timer;

        public void obrazki(int nr) 
        {
            switch (nr) 
            {
                case 1:
                    pcB.Image = global::Prawo_jazdy.Properties.Resources.p1;
                    break;
                case 2:
                    pcB.Image = global::Prawo_jazdy.Properties.Resources.p2;
                    break;
                case 3:
                    pcB.Image = global::Prawo_jazdy.Properties.Resources.p5;
                    break;
                case 4:
                    pcB.Image = global::Prawo_jazdy.Properties.Resources.p0;
                    break;
                case 5:
                    pcB.Image = global::Prawo_jazdy.Properties.Resources.p9;
                    break;
                case 6:
                    pcB.Image = global::Prawo_jazdy.Properties.Resources.p23;
                    break;
                case 7:
                    pcB.Image = global::Prawo_jazdy.Properties.Resources.p24;
                    break;
                case 8:
                    pcB.Image = global::Prawo_jazdy.Properties.Resources.p25;
                    break;
                case 9:
                    pcB.Image = global::Prawo_jazdy.Properties.Resources.p27;
                    break;
                case 10:
                    pcB.Image = global::Prawo_jazdy.Properties.Resources.p30;
                    break;  

            }
        }


        void pytanie()
        {
            lPunkty.Text = punkty.ToString();
            nr_pytania++;
            if (nr_pytania <= 20)
            {
                a = generator.Next((pytania_stand.Count-3) / 3);
                lPolecenie.Text = pytania_stand[a * 3];
                lNrPytaniaPodst.Text = $"{nr_pytania}/20";
                obrazki(Convert.ToInt32(pytania_stand[a*3+1]));
            }
            else if (nr_pytania > 20 && nr_pytania <= 32)
            {
                panelOdp1.Visible = false;
                a = generator.Next((pytania_spec.Count-6) / 6);
                lPolecenie.Text = pytania_spec[a * 6];
                lA.Text = pytania_spec[a * 6 + 2];
                lB.Text = pytania_spec[a * 6 + 3];
                lC.Text = pytania_spec[a * 6 + 4];
                lNrPytaniaSpec.Text = $"{nr_pytania - 20}/12";
                obrazki(Convert.ToInt32(pytania_spec[a * 6 + 5]));
            }
            else
            {
                lPolecenie.Text = "Skończyłeś test";
                lA.Visible = false;
                lB.Visible = false;
                lC.Visible = false;
                timer.Stop();
                MessageBox.Show($"Skończyłeś test z wynikiem {punkty} punktów", "Koniec testu", MessageBoxButtons.OK, MessageBoxIcon.Warning);
                MessageBox.Show($"Odpowiedzi zostały zapisane do pliku odpowiedzi.txt", "Koniec testu", MessageBoxButtons.OK, MessageBoxIcon.Warning);

                File.WriteAllText("Data\\odpowiedzi.txt", string.Empty);
                for (int i = 0; i < pytania.Count; i++)
                {
                    File.AppendAllText("Data\\odpowiedzi.txt", pytania[i] + Environment.NewLine);
                }
                timer.Stop();
                this.Close();
            }
        }

        void pytanie_usun()
        {
            if (nr_pytania <= 20)
            {
                for (int j = 0; j < 3; j++)
                {
                    pytania_stand.RemoveAt(a * 3);
                }
            }
            else if (nr_pytania > 20 && nr_pytania <= 32)
            {
                for (int j = 0; j < 6; j++)
                {
                    pytania_spec.RemoveAt(a * 6);
                }
            }
        }
        void Time(object sender, System.Timers.ElapsedEventArgs e)
        {
            if (IsHandleCreated)
            {
                Invoke(new Action(() =>
                {
                    if (s != 00)
                    {
                        s--;
                        prgB.Value = s;
                    }
                    else
                    {
                        pytanie();
                        ResetTime();
                    }
                    mtxtT.Text = string.Format("{0}:{1}:{2}", h.ToString().PadLeft(2, '0'), m.ToString().PadLeft(2, '0'), s.ToString());
                }));
            }
        }
       void ResetTime()
        {
                if (s != 25)
                {
                    timer.Stop();
                    s = 25;
                    mtxtT.Text = string.Format("{0}:{1}:{2}", h.ToString().PadLeft(2, '0'), m.ToString().PadLeft(2, '0'), s.ToString());
                    prgB.Value = s;
                    timer.Start();
                }
        }
        public Prawo_Jazdy()
        {

            InitializeComponent();
            pytanie();

            lNrPytaniaPodst.Text = "1/20";
            lNrPytaniaSpec.Text = "0/12";

            prgB.Value = 25;
            timer = new System.Timers.Timer();
            timer.Interval = 1000;
            timer.Elapsed += Time;
            timer.Start();
        }

        private void btnEnd_Click(object sender, EventArgs e)
        {
            timer.Stop();
            this.Close();
            
        }

        private void btnTak_Click(object sender, EventArgs e)
        {
            if (pytania_stand[a*3 + 2] == "true")
            {
                punkty = punkty + 2;
                pytania.Add($"{nr_pytania}: {pytania_stand[a*3]}\nDobrze\nOdpowiedz: Tak\n");
            }
            else
            {
                pytania.Add($"{nr_pytania}: {pytania_stand[a * 3]}\nZle\nOdpowiedz: Tak\nPoprawna odpowiedz: Nie\n");
            }

            pytanie_usun();
            pytanie();
            ResetTime();
        }

        private void btnNie_Click(object sender, EventArgs e)
        {
            if (pytania_stand[a * 3 + 2] == "false")
            {
                punkty = punkty + 2;
                pytania.Add($"{nr_pytania}: {pytania_stand[a * 3]}\nDobrze\nOdpowiedz: Nie\n");
            }
            else
            {
                pytania.Add($"{nr_pytania}: {pytania_stand[a * 3]}\nZle\nOdpowiedz: Nie\nPoprawna odpowiedz: Tak\n");
            }

            pytanie_usun();
            pytanie();
            ResetTime();
        }

        private void btnA_Click(object sender, EventArgs e)
        {

            if (pytania_spec[a * 6 + 1] == "A")
            {
                punkty = punkty + 3;
                pytania.Add($"{nr_pytania}: {pytania_spec[a*6]}\nDobrze\nOdpowiedz: A\n");
            }
            else
            {
                pytania.Add($"{nr_pytania}: {pytania_spec[a * 6]}\nZle\nOdpowiedz: A\nPoprawna odpowiedz: {pytania_spec[a*6+1]}\n");
            }

            pytanie_usun();
            pytanie();
            ResetTime();
        }

        private void btnB_Click(object sender, EventArgs e)
        {

            if (pytania_spec[a * 6 + 1] == "B")
            {
                punkty = punkty + 3;
                pytania.Add($"{nr_pytania}: {pytania_spec[a * 6]}\nDobrze\nOdpowiedz: B\n");
            }
            else
            {
                pytania.Add($"{nr_pytania}: {pytania_spec[a * 6]}\nZle\nOdpowiedz: B\nPoprawna odpowiedz: {pytania_spec[a * 6 + 1]}\n");
            }

            pytanie_usun();
            pytanie();
            ResetTime();
        }

        private void btnC_Click(object sender, EventArgs e)
        {

            if (pytania_spec[a * 6 + 1] == "C")
            {
                punkty = punkty + 3;
                pytania.Add($"{nr_pytania}: {pytania_spec[a * 6]}\nDobrze\nOdpowiedz: C\n");
            }
            else
            {
                pytania.Add($"{nr_pytania}: {pytania_spec[a * 6]}\nZle\nOdpowiedz: C\nPoprawna odpowiedz: {pytania_spec[a * 6 + 1]}\n");
            }

            pytanie_usun();
            pytanie();
            ResetTime();
        }

        private void btnNext_Click(object sender, EventArgs e)
        {
            pytanie_usun();
            pytanie();
            ResetTime();
        }

        

        
    }
}
