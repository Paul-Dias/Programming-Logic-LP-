using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace WindowsFormsApplication1
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            int t = 0;

            for (int n = 0; n <= 100; n++)
            {
                t = t + n;
            }
            MessageBox.Show("A soma dos 100 primeiros numeros vale: " + t);
        }
    }
}
