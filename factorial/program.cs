using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace factorials
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Recursion " + factByRec(20));
            Console.WriteLine("Loop " + factByLoop(20));
            Console.ReadLine();
        }

        static long factByRec(long i)
        {
            // deal with 0 and negative numbers
            if (i < 0) {
                return 0;
            }
            // deal with factorial of 2
            if (i < 2) {
                return 1;
            }
            // recursivly calculate the value of factorials for i
            return i * factByRec(i - 1);
        }
        
        static long factByLoop(long n)
        {
            // deal with 0 and negative numbers
            if (n < 0) {
                return 0;
            }
            // loop to calculate the value of factorials for n
            long x = 1;
            for (long i = 1; i <= n; i++)
            {
                 x = x * i;
            }
            return x;
        }

    }
}
