using System;

    class program
    {
        
        static void Main()
        {
            Console.Clear();

            Console.Write("Proszę podać liczbe a: ");
            int a = Convert.ToInt32(Console.ReadLine());
            Console.Clear();

            Console.Write("Proszę podać liczbe b: ");
            int b = Convert.ToInt32(Console.ReadLine());
            Console.Clear();

            Console.Write("Proszę podać liczbe c: ");
            int c = Convert.ToInt32(Console.ReadLine());
            Console.Clear();

            int delta = b*b-4*(a*c);

            if(delta < 0)
            {
                Console.WriteLine("Brak miejsc zerowych.");
            }
                if(delta == 0)
                {
                    Console.WriteLine("Jedno miejsce zerowe.");
                }
                    if(delta > 0)
                    {
                        Console.WriteLine("Dwa miejsca zerowe.");
                    }
            Console.ReadKey();
        }

    }