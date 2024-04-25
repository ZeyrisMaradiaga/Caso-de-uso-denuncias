import java.util.ArrayList;
import java.util.Date;
import java.util.List;

public class SistemaDenuncias {
    private List<Persona> personasRegistradas;
    private List<Denuncia> denuncias;

    public SistemaDenuncias() {
        this.personasRegistradas = new ArrayList<>();
        this.denuncias = new ArrayList<>();
    }

    // Método para realizar una nueva denuncia
    public void realizarDenuncia(Persona denunciante, Persona denunciado, Date fecha, String hora, String lugar, List<String> delitos, String estado, String detalleHechos, String evidencias) {
        Denuncia nuevaDenuncia = new Denuncia(denunciante, denunciado, fecha, hora, lugar, delitos, estado, detalleHechos, evidencias);
        denuncias.add(nuevaDenuncia);
    }

    // Método para validar si una persona está registrada en el sistema
    public boolean personaRegistrada(Persona persona) {
        return personasRegistradas.contains(persona);
    }

    // Método para registrar una nueva persona en el sistema
    public void registrarPersona(Persona persona) {
        personasRegistradas.add(persona);
    }

    // Método para gestionar testigos
    public void gestionarTestigos(Denuncia denuncia, List<Testigo> testigos) {
        // Implementación de la gestión de testigos
        public void gestionarTestigos(Denuncia denuncia, List<Testigo> testigos) {
    // Verificar si la denuncia existe en la lista de denuncias
    if (denuncias.contains(denuncia)) {
        // Asociar los testigos a la denuncia
        denuncia.setTestigos(testigos);
        System.out.println("Testigos asociados a la denuncia correctamente.");
    } else {
        System.out.println("La denuncia no existe en el sistema.");
    }

    public void setTestigos(List<Testigo> testigos) {
    this.testigos = testigos;
}

}

    }

    // Otros métodos según sea necesario
}
