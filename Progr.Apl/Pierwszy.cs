using System;

    class program
    {
        
        static void Main()
        
        {
            int a=5;
            int b=6;
            string dzialanie = Console.ReadLine();
            if(dzialanie == "+")
            {
                int wynik = a + b;
                Console.WriteLine("Wynik Dodawania: " + wynik);
            }
        }

    }