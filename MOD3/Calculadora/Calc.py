using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace WindowsFormsApplication2
{
  public partial class calculadora : Form
    {
      public calculadora()
        {
        InitializeComponent();
        }

  private void label1_Click(object sender, EventArgs e)
        {
            
        }

  private void suma_Click(object sender, EventArgs e)
        {
            {
  #Declarar la variable
    string num1, num2;
    num1 = impuct();

  #Asignar que no este vacio
    num1 = textBox1.Text;
    num2 = textBox2.Text;

  #Validar que no este vacio
  if (num1.Trim() == "")
         {
    MessageBox.Show("El num 1 no puede estar vacio");
    return;
          }

  #Agregar la otra validacion...

  #Realizar calculo
  int resultado = int.Parse(num1) + int.Parse(num2);
  textBox3.Text = resultado.ToString();
          }
        }

private void resta_Click(object sender, EventArgs e)
        {
#Declarar la variable
  string num1, num2;

#Asignar que no este vacio
  num1 = textBox1.Text;
  num2 = textBox2.Text;

#Validar que no este vacio
  if (num1.Trim() == "")
            {
    MessageBox.Show("El num 1 no puede estar vacio");
    return;
            }
        }

private void suma_Click(object sender, EventArgs e)
        {
#Declarar la variable
  string num1, num2;

#Asignar que no este vacio
  num1 = textBox1.Text;
  num2 = textBox2.Text;

#Validar que no este vacio
if (num1.Trim() == "")
           { 
  MessageBox.Show ("El num 1 no puede estar vacio");
  return;
           }

#Agregar la otra validacion...
 
#Realizar calculo
int resultado = int.Parse(num1) - int.Parse(num2);
textBox3.Text = resultado.ToString();
     }

    }
     }