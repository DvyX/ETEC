import java.util.Scanner;

	public class Idade {

		public static void main(String args[]) {
			
			int aa,an,id;
			Scanner ler = new Scanner(System.in);
			System.out.println("Digite o ano atual: ");
			aa = ler.nextInt();
			System.out.println("Digite o ano de nascimento: ");
			an = ler.nextInt();
			id = aa-an;
			System.out.println("A idade é: "+id);
			
	}
}
