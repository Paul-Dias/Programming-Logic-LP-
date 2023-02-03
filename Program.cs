using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace calculador
{
    class Program
    {
        public static float R,A,B;
        public static string MSG="Tecle algo para continuar...";
    
        static void Main(string[] args)
        {
            string opcao;
            opcao="0";
            while(opcao!="5")
            {
                Console.Title="Calculadora";
                Console.BackgroundColor = ConsoleColor.Black;
                Console.ForegroundColor = ConsoleColor.Green;
                Console.Clear();
                Console.WriteLine("Menu principal");
                Console.WriteLine("--------------");
                Console.WriteLine();
                Console.WriteLine();
                Console.WriteLine("1- Soma");
                Console.WriteLine("2- Subtração");
                Console.WriteLine("3- Multiplicação");
                Console.WriteLine("4- Divisão");
                Console.WriteLine("5- Fim de programa");
                Console.WriteLine();
                Console.WriteLine("Escolha uma opção");

                opcao = Console.ReadLine();
                if (opcao != "5")
                    switch (opcao)
                    {
                        case "1": RotSoma(); break;
                        case "2": RotSubtracao(); break;
                        case "3": RotDivisao(); break;
                        case "4": RotMultiplicacao(); break;   
                        default:
                            Console.WriteLine("Opcao Invalida");
                            Console.WriteLine(MSG);
                            Console.ReadKey();
                            break;
                    }

            }

        }
        public static float Calculo(float X, float Y, string operador)
        {
            float Z = 0;
            switch (operador)
            {
                case "+": Z = X + Y; break;
                case "-": Z = X - Y; break;
                case "*": Z = X * Y; break;
                case "/": Z = X / Y; break;
            }
            return Z;
        }

                    
                    private static void Entrada()
                    {
                        Console.Write("Entre um valor para A");
                        A=float.Parse(Console.ReadLine());
                        Console.Write("Entre um valor para B");
                        B = float.Parse(Console.ReadLine());
                    }
                    private static void Saida()
                    {
                        Console.WriteLine();
                        Console.Write("O resultado entre A e B ={0:0.00}",R);
                        Console.WriteLine();
                        Console.WriteLine();
                        Console.WriteLine(MSG);
                        Console.ReadKey();

                    }
                    private static void RotSubtracao()
                    {
                        Console.Clear();
                        Console.ForegroundColor = ConsoleColor.Cyan;
                        Console.WriteLine("Rotina da Subtração");
                        Console.WriteLine("-------------------");
                        Console.WriteLine();
                        Entrada();
                        R = Calculo(A, B, "-");
                        Saida();
                    }
                    private static void RotSoma()
                    {
                        Console.Clear();
                        Console.ForegroundColor = ConsoleColor.Cyan;
                        Console.WriteLine("Rotina da Soma");
                        Console.WriteLine("-------------------");
                        Console.WriteLine();
                        Entrada();
                        R = Calculo(A, B, "+");
                        Saida();
                    }
                    private static void RotDivisao()
                    {
                        Console.Clear();
                        Console.ForegroundColor = ConsoleColor.Cyan;
                        Console.WriteLine("Rotina da Subtração");
                        Console.WriteLine("-------------------");
                        Console.WriteLine();
                        Entrada();
                        R = Calculo(A, B, "/");
                        Saida();
                    }
                    private static void RotMultiplicacao()
                    {
                        Console.Clear();
                        Console.ForegroundColor = ConsoleColor.Cyan;
                        Console.WriteLine("Rotina da Multiplicação");
                        Console.WriteLine("-------------------");
                        Console.WriteLine();
                        Entrada();
                        if (B == 0)
                        {
                            Console.WriteLine();
                            Console.WriteLine("Erro.");
                            Console.WriteLine();
                            Console.WriteLine(MSG);
                            Console.ReadKey();
                        }
                        else
                            R = Calculo(A, B, "/");
                        Saida();

                    }

            }

        }
    

