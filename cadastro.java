import java.time.LocalDate;
import java.time.Period;
import java.time.format.DateTimeFormatter;
import java.time.format.DateTimeParseException;
import java.util.Scanner;

public class Cadastro {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        try {
            // Solicita o nome do usuário
            System.out.print("Digite seu nome: ");
            String nome = scanner.nextLine();

            // Solicita a data de nascimento
            System.out.print("Digite sua data de nascimento (dd/MM/yyyy): ");
            String dataNascimentoStr = scanner.nextLine();

            // Formata a data de nascimento
            DateTimeFormatter formatter = DateTimeFormatter.ofPattern("dd/MM/yyyy");
            LocalDate dataNascimento = LocalDate.parse(dataNascimentoStr, formatter);

            // Calcula a idade do usuário
            int idade = Period.between(dataNascimento, LocalDate.now()).getYears();

            // Verifica se o usuário tem mais de 18 anos
            if (idade < 18) {
                System.out.println("Você precisa ter mais de 18 anos para acessar.");
                return; // Encerra o programa se o usuário for menor de idade
            }

            // Solicita a senha
            System.out.print("Digite sua senha: ");
            String senha = scanner.nextLine();

            // Verifica se a senha tem mais de 6 dígitos
            if (senha.length() <= 6) {
                System.out.println("A senha precisa ter mais de 6 dígitos.");
                return; // Encerra o programa se a senha for muito curta
            }

            // Se o usuário passar nas verificações
            System.out.println("Cadastro realizado com sucesso!");

        } catch (DateTimeParseException e) {
            System.out.println("Formato de data inválido. Por favor, use o formato dd/MM/yyyy.");
        } catch (Exception e) {
            System.out.println("Ocorreu um erro: " + e.getMessage());
        } finally {
            scanner.close();  // Fecha o Scanner
        }
    }
}
