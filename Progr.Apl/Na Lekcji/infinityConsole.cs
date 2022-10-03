using System;

    class program
    {
        
        static void Main()
        {
            int liczba = 0;
            while (liczba<500000000)
            {
                liczba++;
                Console.Write(liczba + " ");
            }
            Console.WriteLine("Koniec");
        }
    }
