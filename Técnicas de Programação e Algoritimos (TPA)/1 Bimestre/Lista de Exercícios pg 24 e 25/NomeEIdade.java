import java.util.Scanner;
public class NomeEIdade {
	public static void main(String args[]) {
		String n,id;
		Scanner ler=new Scanner(System.in);
		System.out.println("Digite o seu nome");
		n=ler.next();
		System.out.println("Digite a sua idade");
		id=ler.next();
		System.out.println(n+", você tem "+id+" anos.");
		
	}

}
