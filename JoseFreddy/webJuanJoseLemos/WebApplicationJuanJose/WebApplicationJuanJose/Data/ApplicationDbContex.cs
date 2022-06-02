using Microsoft.EntityFrameworkCore;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using WebApplicationJuanJose.Models;

namespace WebApplicationJuanJose.Data
{
    public class ApplicationDbContext:DbContext
    {
        //Se crea el constructor
        public ApplicationDbContext(DbContextOptions<ApplicationDbContext> option):base(option)
        {
           
        }
        //Agregamos los modelos que luego seran tablas
        public DbSet<Registro> Registro { get; set; }
    }
}
