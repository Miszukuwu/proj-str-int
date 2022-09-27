using System;

    class program
    {
        
        static void Main()
        {
            Console.Write("Podaj długość boku a: ");
            int a = Convert.ToInt32(Console.ReadLine());

            Console.Write("Podaj długość wysokość h: ");
            int h = Convert.ToInt32(Console.ReadLine());

            int p = ((a*h)/2);
            Console.WriteLine("Pole trójkąta wynosi " + p);
        }
    }
