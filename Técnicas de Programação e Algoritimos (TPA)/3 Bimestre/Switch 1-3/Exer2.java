import java.util.Scanner;
public class Exer2 {
	public static void main(String[]args) {
	
		Scanner ler = new Scanner(System.in);
		int placa;
		System.out.println("Digite o final da placa:");
		placa = ler.nextInt();
		switch(placa){
			case 0:
			{
				System.out.println("Dias de Rodizio: Sexta-Feira");
				break;
			}
			case 1:
			{
				System.out.println("Dias de Rodizio: Segunda-Feira");
				break;
			}
			case 2:
			{
				System.out.println("Dias de Rodizio: Segunda-Feira");
				break;
			}
			case 3:
			{
				System.out.println("Dias de Rodizio: Terça-Feira");
				break;
			}
			case 4:
			{
				System.out.println("Dias de Rodizio: Terça-Feira");
				break;
			}
			case 5:
			{
				System.out.println("Dias de Rodizio: Quarta-Feira");
				break;
			}
			case 6:
			{
				System.out.println("Dias de Rodizio: Quarta-Feira");
				break;
			}
			case 7:
			{
				System.out.println("Dias de Rodizio: Quinta-Feira");
				break;
			}
			case 8:
			{	
				System.out.println("Dias de Rodizio: Quinta-Feira");
				break;
			}
			case 9:
			{
				System.out.println("Dias de Rodizio: Sexta-Feira");
			}
		}
	}
}
