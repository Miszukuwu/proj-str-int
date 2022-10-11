using System;
    class program
    {
        static void Main()
        {
            while(1==1)
            {
                Console.Clear();

                Console.Write("Proszę podać liczbę: ");
                int a = Convert.ToInt32(Console.ReadLine());

                if (a%2==0)
                {
                    Console.WriteLine("Liczba jest parzysta.");
                }
                else
                {
                    Console.WriteLine("Liczba nie jest parzysta.");
                }
                Console.ReadKey();
            }
        }
    }