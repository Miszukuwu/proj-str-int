using System;

class program
{
    static void Main()
    {
        int[,] arr = new int[6,6];

        for(int x=0;x<6;x++)
            arr[x,x] = 1;

        for(int i=0;i<6;i++)
        {
            for(int j=0;j<6;j++)
                Console.Write(arr[i,j] + " ");
            
            Console.WriteLine();
        }
    }
}