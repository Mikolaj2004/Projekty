using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Prawo_jazdy
{
    public partial class Start : Form
    {
        public Start()
        {
            InitializeComponent();
        }

        private void btnkB_Click(object sender, EventArgs e)
        {
            Prawo_Jazdy ft = new Prawo_Jazdy();
            ft.Location = this.Location;
            ft.StartPosition = FormStartPosition.Manual;
            ft.FormClosing += delegate { this.Show(); };
            ft.Show();
            this.Hide();
        }

        private void label2_Click(object sender, EventArgs e)
        {

        }
    }
}
