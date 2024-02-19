using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Practise_ConsoleApp1
{
    class Book
    {
        public string title;
        public string author;
        public int pages;
        public string GetDetails() // Method
        {
            return "Name: " + title + "; Author " + author + "; " + Convert.ToString(pages) + " pages.";
        }
    }
}
