using System;

    class Program
    {
        static void Main()
        {
        Console.Clear();
        int y = 0;
        int w = 1;
        int wynik = 1;
        Console.Write("Podaj liczbe n: ");
        int n = Convert.ToInt32(Console.Read());
        while(y<n)
        {
            wynik = w * wynik;
            w++;
            y++;
        }
        Console.WriteLine("Silnia liczby n wynosi: " + wynik);
        Console.ReadKey();
        }
    }
