using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Eventos
{
    public partial class Form1 : Form
    {
public Form1()
        {
InitializeComponent();
        }

private void label1_Click(object sender, EventArgs e)
        {

        }

private void button1_Click(object sender, EventArgs e)
        {
#Declarar las variables
  string dia;

#Almacenar el valor del texto en una variable
dia = textBox1.Text;

#preguntar si la variable es igual a 1 entonces imprimir Lunes
if (dia == "1")
            {
  MessageBox.Show("Lunes");
            }

#preguntar si la variable es igual a 2 entonces
if (dia == "2")
            {
  MessageBox.Show("Martes");
            }

if (dia == "3")
            {
  MessageBox.Show("Miercoles");
            }

if (dia == "4")
            {
  MessageBox.Show("Jueves");
            }

        }

private void button2_Click(object sender, EventArgs e)
        {
  MessageBox.Show("Click");
        }

private void button2_MouseHover(object sender, EventArgs e)
        {
            
        }

private void button2_MouseLeave(object sender, EventArgs e)
        {
  button2.BackColor = Color.Red;
        }

private void Form1_KeyDown(object sender, KeyEventArgs e)
        {
  MessageBox.Show("presionaste una tecla");

if (e.KeyValue == 87)
            {
  MessageBox.Show("hacia arriba");
  button2.Location = new Point(button2.Width,       
   button2.Location.Y - 10);
            }
        }

private void Form1_KeyUp(object sender, KeyEventArgs e)
        {
  MessageBox.Show("Liberaste una tecla");
        }

private void textBox1_KeyDown(object sender, KeyEventArgs e)
        {
  MessageBox.Show("Presionaste una tecla");

  MessageBox.Show(e.KeyValue.ToString());

if (e.KeyValue == 13)
            {
  MessageBox.Show("Diste enter");
            }

if (e.KeyValue == 122)
            {
  MessageBox.Show("Pantalla Completa");
            }
        }
    }
}
