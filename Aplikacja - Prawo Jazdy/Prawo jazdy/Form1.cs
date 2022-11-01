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
        List<string> pytania_stand = File.ReadLines(@"C:\baza\pytania_stand.txt").ToList();
        List<string> pytania_spec = File.ReadLines(@"C:\baza\pytania_spec.txt").ToList();
        List<string> pytania = new List<string>();

        int a;
        int punkty;
        int nr_pytania;
        int h = 00;
        int m = 00;
        int s = 25;
        System.Timers.Timer timer;

        void pytanie()
        {
            lPunkty.Text = punkty.ToString();
            nr_pytania++;
            if (nr_pytania <= 20)
            {
                a = generator.Next((pytania_stand.Count-3) / 3);
                polecenieLabel.Text = pytania_stand[a * 3];
                lNrPytaniaPodst.Text = $"{nr_pytania}/20";
            }
            else if (nr_pytania > 20 && nr_pytania <= 32)
            {
                panelOdp1.Visible = false;
                a = generator.Next((pytania_spec.Count-5) / 5);
                polecenieLabel.Text = pytania_spec[a * 5];
                labelA.Text = pytania_spec[a * 5 + 2];
                labelB.Text = pytania_spec[a * 5 + 3];
                labelC.Text = pytania_spec[a * 5 + 4];
                lNrPytaniaSpec.Text = $"{nr_pytania - 20}/12";
            }
            else
            {
                polecenieLabel.Text = "Skończyłeś test";
                timer.Stop();
                MessageBox.Show($"Skończyłeś test z wynikiem {punkty} punktów", "Koniec testu", MessageBoxButtons.OK, MessageBoxIcon.Warning);
                MessageBox.Show($"Odpowiedzi zostały zapisane do pliku odpowiedzi.txt", "Koniec testu", MessageBoxButtons.OK, MessageBoxIcon.Warning);

                File.WriteAllText(@"C:\baza\odpowiedzi.txt", string.Empty);
                for (int i = 0; i < pytania.Count; i++)
                {
                    File.AppendAllText(@"C:\baza\odpowiedzi.txt", pytania[i] + Environment.NewLine);
                }

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
                for (int j = 0; j < 5; j++)
                {
                    pytania_spec.RemoveAt(a * 5);
                }
            }
        }
        void Time(object sender, System.Timers.ElapsedEventArgs e)
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
        } ));
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
        }

        private void btnEnd_Click(object sender, EventArgs e)
        {
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

            pytanie();
            pytanie_usun();
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

            pytanie();
            pytanie_usun();
            ResetTime();
        }

        private void btnA_Click(object sender, EventArgs e)
        {

            if (pytania_spec[a * 5 + 1] == "A")
            {
                punkty = punkty + 3;
                pytania.Add($"{nr_pytania}: {pytania_spec[a*5]}\nDobrze\nOdpowiedz: A\n");
            }
            else
            {
                pytania.Add($"{nr_pytania}: {pytania_spec[a * 5]}\nZle\nOdpowiedz: A\nPoprawna odpowiedz: {pytania_spec[a*5+1]}\n");
            }

            pytanie();
            pytanie_usun();
            ResetTime();
        }

        private void btnB_Click(object sender, EventArgs e)
        {

            if (pytania_spec[a * 5 + 1] == "B")
            {
                punkty = punkty + 3;
                pytania.Add($"{nr_pytania}: {pytania_spec[a * 5]}\nDobrze\nOdpowiedz: B\n");
            }
            else
            {
                pytania.Add($"{nr_pytania}: {pytania_spec[a * 5]}\nZle\nOdpowiedz: B\nPoprawna odpowiedz: {pytania_spec[a * 5 + 1]}\n");
            }

            pytanie();
            pytanie_usun();
            ResetTime();
        }

        private void btnC_Click(object sender, EventArgs e)
        {

            if (pytania_spec[a * 5 + 1] == "C")
            {
                punkty = punkty + 3;
                pytania.Add($"{nr_pytania}: {pytania_spec[a * 5]}\nDobrze\nOdpowiedz: C\n");
            }
            else
            {
                pytania.Add($"{nr_pytania}: {pytania_spec[a * 5]}\nZle\nOdpowiedz: C\nPoprawna odpowiedz: {pytania_spec[a * 5 + 1]}\n");
            }

            pytanie();
            pytanie_usun();
            ResetTime();
        }

        private void btnNext_Click(object sender, EventArgs e)
        { 
            pytanie();
            pytanie_usun();
            ResetTime();
        }

        private void Prawo_Jazdy_Load(object sender, EventArgs e)
        {

            prgB.ForeColor = Color.White;
            prgB.Value = 25;
            prgB.Step = 1;
            
            timer = new System.Timers.Timer();
            timer.Interval = 1000;
            timer.Elapsed += Time;
            timer.Start();
        }
    }
}
