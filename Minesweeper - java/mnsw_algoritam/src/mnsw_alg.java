
import java.util.Random;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author demir
 */
public class mnsw_alg {
    
    public int[][] matrix(int[][] ms1)
    {
        int[][] msw = new int[ms1.length][ms1.length];
        int count = 0;
        Random rnd = new Random();
        
        while (count != 10)
            {
                count = 0;
                for (int i = 0; i < 9; i++)
                {
                    for (int j = 0; j < 9; j++)
                    {
                        msw[i][j] = 0;
                    }
                }



                for (int i = 0; i < 10; i++)
                {
                    int bm1 = rnd.nextInt(9);
                    int bm2 = rnd.nextInt(9);
                    msw[bm1][bm2] = 7;
                }

                

                for(int i = 0; i < 9; i++)
                {
                    for(int j = 0; j < 9; j++)
                    {
                        int num = 0;
                        if (msw[i][j] != 7)
                        {
                            if (i == 0 && j == 0)
                            {
                                if (msw[i][j + 1] == 7)
                                {
                                    num++;
                                }

                                if (msw[i + 1][j] == 7)
                                {
                                    num++;
                                }

                                if (msw[i + 1][j + 1] == 7)
                                {
                                    num++;
                                }


                            }
                            else if (i == 0 && j == 8)
                            {

                                if (msw[i][j - 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i + 1][j - 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i + 1][j] == 7)
                                {
                                    num++;
                                }


                            }
                            else if (i == 8 && j == 0)
                            {

                                if (msw[i - 1][j] == 7)
                                {
                                    num++;
                                }
                                if (msw[i - 1][j + 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i][j + 1] == 7)
                                {
                                    num++;
                                }


                            }
                            else if (i == 8 && j == 8)
                            {

                                if (msw[i][j - 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i - 1][j - 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i - 1][j] == 7)
                                {
                                    num++;
                                }


                            }
                            else if (j == 0)
                            {

                                if (msw[i - 1][j] == 7)
                                {
                                    num++;
                                }
                                if (msw[i - 1][j + 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i][j + 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i + 1][j + 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i + 1][j] == 7)
                                {
                                    num++;
                                }


                            }
                            else if (i == 0)
                            {

                                if (msw[i][j - 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i + 1][j - 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i + 1][j] == 7)
                                {
                                    num++;
                                }
                                if (msw[i][j + 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i + 1][j + 1] == 7)
                                {
                                    num++;
                                }


                            }
                            else if (i == 8)
                            {

                                if (msw[i - 1][j - 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i - 1][j] == 7)
                                {
                                    num++;
                                }
                                if (msw[i - 1][j + 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i][j - 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i][j + 1] == 7)
                                {
                                    num++;
                                }


                            }
                            else if (j == 8)
                            {

                               
                                if (msw[i - 1][j - 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i - 1][j] == 7)
                                {
                                    num++;
                                }
                                if (msw[i][j - 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i + 1][j - 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i + 1][j] == 7)
                                {
                                    num++;
                                }
                            }
                            else
                            {

                                if (msw[i - 1][j - 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i - 1][j] == 7)
                                {
                                    num++;
                                }
                                if (msw[i - 1][j + 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i][j - 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i][j + 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i + 1][j - 1] == 7)
                                {
                                    num++;
                                }
                                if (msw[i + 1][j] == 7)
                                {
                                    num++;
                                }
                                if (msw[i + 1][j + 1] == 7)
                                {
                                    num++;
                                }
                            }
                            msw[i][j] = num;
                        }
                    }
                }


                for (int i = 0; i < 9; i++)
                {
                    for (int j = 0; j < 9; j++)
                    {
                        if(msw[i][j] == 7)
                        {
                        count++;
                        }
                    }
                }
                
            }
        
        return msw;
    }
    
}
