using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Threading.Tasks;

namespace WebApplicationJuanJose.Models
{
    public class Registro
    {
        [Key]
        public int IdRegistro { get; set; }
        [DisplayName("Foto")]
        public byte img { get; set; }
        [DisplayName("Documento")]
        [StringLength(20)]
        [DataType(DataType.Text)]
        [Required(ErrorMessage = "Por favor ingrese el documento")]
        public string documento { get; set; }

        [DisplayName("Nombres")]
        [StringLength(30)]
        [DataType(DataType.Text)]
        [Required(ErrorMessage = "Por favor ingrese mínimo un nombre")]
        public string Nombres { get; set; }

        [DisplayName("Apellidos")]
        [StringLength(30)]
        [DataType(DataType.Text)]
        [Required(ErrorMessage = "Por favor ingrese mínimo un apellido")]
        public string Apellidos { get; set; }

        [DisplayName("Fecha nacimiento")]
        [DataType(DataType.DateTime)]
        [Required(ErrorMessage = "Debe ingresar una fecha de nacimiento")]
        [DisplayFormat(DataFormatString = ("{0:dd-MM-yyyy}"))]
        public DateTime FechaNacimiento { get; set; }

        [DisplayName("Dirección")]
        [StringLength(100)]
        [DataType(DataType.Text)]
        [Required(ErrorMessage = "Por favor ingrese una dirección")]
        public string Direccion { get; set; }

        [DisplayName("Celular")]
        [StringLength(15)]
        [DataType(DataType.PhoneNumber)]
        [Required(ErrorMessage = "Por favor ingrese un número de celular")]
        public string Celular { get; set; }

        [DisplayName("Género")]
        [StringLength(1)]
        [DataType(DataType.Text)]
        [Required(ErrorMessage = "Género requerido")]
        public string Genero { get; set; }

        [DisplayName("Deporte")]
        [StringLength(30)]
        [DataType(DataType.Text)]
        [Required(ErrorMessage = "Por favor ingrese un deporte")]
        public string Deporte { get; set; }


        [DisplayName("Trabaja")]
        [StringLength(2)]
        [DataType(DataType.Text)]
        [Required(ErrorMessage = "Por favor ingrese un deporte")]
        public string Trabaja { get; set; }

        [DisplayName("Salario")]
        [DataType(DataType.Currency)]
        [Required(ErrorMessage = "Por favor ingrese su salario")]
        public string Salario { get; set; }

        [DisplayName("Estado")]
        [StringLength(1)]
        [DataType(DataType.Text)]
        [Required(ErrorMessage = "Estado requerido")]
        public string Estado { get; set; }
    }
}
