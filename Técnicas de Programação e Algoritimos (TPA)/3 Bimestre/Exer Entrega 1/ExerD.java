import java.util.Scanner;
public class ExerD {
	public static void main(String[]args) {
		Scanner in = new Scanner(System.in);
		String o1,o2,n1,n2;
		int i=1,p1=0,p2=0;
		System.out.println("Digite o nome do 1ºPlayer:");
		n1= in.next();
		System.out.println("Digite o nome do 2ºPlayer:");
		n2= in.next();
		while(i<=3 && p1<=2 && p2<=2) {
			System.out.println(n1+", Escolha sua Jogada:");
			o1 = in.next();
			System.out.println(n2+", Escolha sua Jogada:");
			o2 = in.next();
			switch(o1) {
				case"papel":
				case"Papel":
				case"PAPEL":
				{
					switch(o2) {
					case"tesoura":
					case"Tesoura":
					case"TESOURA":
					{
						System.out.println("Vitória do "+n2);
						p2++;
						i++;
						break;
					}case"pedra":
					case"Pedra":
					case"PEDRA":
					{
						System.out.println("Vitória do "+n1);
						p1++;
						i++;
						break;
					}
					case"papel":
					case"Papel":
					case"PAPEL":
					{
						System.out.println("Empate");
						i++;
						break;
					}
					default:
					{
						System.out.println("Oh Não!, "+n2+" Jogador Inseriu Uma Jogada Inválida :( - Jogue Novamente!");
						break;
					}
				}
					break;
				}
				case"tesoura":
				case"Tesoura":
				case"TESOURA":
				{
					switch(o2) {
					case"tesoura":
					case"Tesoura":
					case"TESOURA":
					{
						System.out.println("Empate");
						i++;
						break;
					}case"pedra":
					case"Pedra":
					case"PEDRA":
					{
						System.out.println("Vitória do "+n2);
						p2++;
						i++;
						break;
					}case"papel":
					case"Papel":
					case"PAPEL":
					{
						System.out.println("Vitória do "+n1);
						p1++;
						i++;
						break;
					}
					default:
					{
						System.out.println("Oh Não!, "+n2+" Inseriu Uma Jogada Inválida :( - Jogue Novamente!");
						break;
					}
				}
					break;
				}
				case"pedra":
				case"Pedra":
				case"PEDRA":
				{
					switch(o2) {
					case"tesoura":
					case"Tesoura":
					case"TESOURA":
					{
						System.out.println("Vitória do "+n1);
						p1++;
						i++;
						break;
					}case"pedra":
					case"Pedra":
					case"PEDRA":
					{
						System.out.println("Empate");
						i++;
						break;
					}case"papel":
					case"Papel":
					case"PAPEL":
					{
						System.out.println("Vitória do "+n2);
						p1++;
						i++;
						break;
					}
					
					default:
					{
						System.out.println("Oh Não!, "+n2+" Inseriu Uma Jogada Inválida :( - Jogue Novamente!");
						break;
					}
					}
					break;
				}
				default:
				{
					System.out.println("Oh Não!, "+n1+" Inseriu Uma Jogada Inválida :( - Jogue Novamente!");
					break;
				}
			}
			if(p1==2) {
				System.out.println("O "+n1+" Venceu o Confronto!");
			i=4;
			}else if(p2==2) {
				System.out.println("O "+n2+" Venceu o Confronto!");
				i=4;
			}else if(i==4){
				System.out.println("o Confronto terminou Empatado!");
			}
		}
	}
}