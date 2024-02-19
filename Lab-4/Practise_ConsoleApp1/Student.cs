using System;
using System.Collections.Generic;
using System.Linq;
using System.Security.Cryptography;
using System.Text;
using System.Threading.Tasks;

namespace Practise_ConsoleApp1
{
    class Student
    {
        public string name;
        public int age;
        public int id
        {
            get { return id; } 
            set { if (value < 0) id = 0;
            else if(value>10)id=94}
        }
        public Student()
        {

        }        
        

    }
}
