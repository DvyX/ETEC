import java.util.Scanner;
public class Exercicio4 {

	public static void main(String[]args) {
		
		double p,ipva;
		Scanner ler = new Scanner(System.in);
		System.out.println("Digite o preço do carro: ");
		p = ler.nextDouble();
		ipva = (p*4)/100;
		System.out.println("O IPVA é de: "+ipva+"R$");
		
		}
	
}
