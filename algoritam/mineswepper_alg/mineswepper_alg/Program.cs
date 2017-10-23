using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace mineswepper_alg
{
    class Program
    {
        static void Main(string[] args)
        {
            int[,] msw = new int[9, 9];
            int brojac = 0;
            Random rnd = new Random();

            while (brojac != 10)
            {
                brojac = 0;
                for (int i = 0; i < 9; i++)
                {
                    for (int j = 0; j < 9; j++)
                    {
                        msw[i, j] = 0;
                    }
                }



                for (int i = 0; i < 10; i++)
                {
                    int bm1 = rnd.Next(0, 9);
                    int bm2 = rnd.Next(0, 9);
                    msw[bm1, bm2] = 7;
                }

                

                for(int i = 0; i < 9; i++)
                {
                    for(int j = 0; j < 9; j++)
                    {
                        int num = 0;
                        if (msw[i, j] != 7)
                        {
                            if (i == 0 && j == 0)
                            {
                                if (msw[i, j + 1] == 7)
                                {
                                    num++;
                                }

                                if (msw[i + 1, j] == 7)
                                {
                                    num++;
                                }

                                if (msw[i + 1, j + 1] == 7)
                                {
                                    num++;
                                }


                            }
                            else if (i == 0 && j == 8)
                            {

                                if (msw[i, j - 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i + 1, j - 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i + 1, j] == 7)
                                {
                                    num++;
                                }


                            }
                            else if (i == 8 && j == 0)
                            {

                                if (msw[i - 1, j] == 7)
                                {
                                    num++;
                                }
                                if (msw[i - 1, j + 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i, j + 1] == 7)
                                {
                                    num++;
                                }


                            }
                            else if (i == 8 && j == 8)
                            {

                                if (msw[i, j - 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i - 1, j - 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i - 1, j] == 7)
                                {
                                    num++;
                                }


                            }
                            else if (j == 0)
                            {

                                if (msw[i - 1, j] == 7)
                                {
                                    num++;
                                }
                                if (msw[i - 1, j + 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i, j + 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i + 1, j + 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i + 1, j] == 7)
                                {
                                    num++;
                                }


                            }
                            else if (i == 0)
                            {

                                if (msw[i, j - 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i + 1, j - 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i + 1, j] == 7)
                                {
                                    num++;
                                }
                                if (msw[i, j + 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i + 1, j + 1] == 7)
                                {
                                    num++;
                                }


                            }
                            else if (i == 8)
                            {

                                if (msw[i - 1, j - 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i - 1, j] == 7)
                                {
                                    num++;
                                }
                                if (msw[i - 1, j + 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i, j - 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i, j + 1] == 7)
                                {
                                    num++;
                                }


                            }
                            else if (j == 8)
                            {

                               
                                if (msw[i - 1, j - 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i - 1, j] == 7)
                                {
                                    num++;
                                }
                                if (msw[i, j - 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i + 1, j - 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i + 1, j] == 7)
                                {
                                    num++;
                                }
                            }
                            else
                            {

                                if (msw[i - 1, j - 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i - 1, j] == 7)
                                {
                                    num++;
                                }
                                if (msw[i - 1, j + 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i, j - 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i, j + 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i + 1, j - 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i + 1, j] == 7)
                                {
                                    num++;
                                }
                                if (msw[i + 1, j + 1] == 7)
                                {
                                    num++;
                                }
                            }
                            msw[i, j] = num;
                        }
                    }
                }


                for (int i = 0; i < 9; i++)
                {
                    for (int j = 0; j < 9; j++)
                    {
                        if(msw[i,j] == 7)
                        {
                        brojac++;
                        }
                    }
                }
                
            }
            for (int i = 0; i < 9; i++)
            {
                for (int j = 0; j < 9; j++)
                {
                    Console.Write(string.Format("{0} ", msw[i, j]));
                }
                Console.WriteLine(Environment.NewLine);
            }
            Console.ReadLine();
        }    
     }   
 }
          

            

                   
                               
                                
                               
                            
                        
            
