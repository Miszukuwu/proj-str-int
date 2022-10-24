using System;

class program
{
    static void Main()
    {
        int[,] tab = new int[10,10];
        
        Random rnd = new Random();

        for(int i=0;i<10;i++)
            for(int j=0;j<10;j++)
            {
                {
                    tab[i,j]=rnd.Next(0,9);
                }
            }

        for(int i=0;i<10;i++)
        {
            for(int j=0;j<10;j++)
            {
                
                {
                    Console.Write(tab[i,j] + " ");
                }
            }
            Console.WriteLine();
        }
            
    }
}