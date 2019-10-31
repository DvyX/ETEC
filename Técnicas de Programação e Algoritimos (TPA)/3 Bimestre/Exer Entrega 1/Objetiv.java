import java.util.Scanner;
public class ExerD {
	public static void main(String[]args) {
		Scanner in = new Scanner(System.in);
		int i=1,p1=0,p2=0,o1=1,o2=1;
		while(i<=3 && p1<2 && p2<2) {
			System.out.println("1- Papel | 2- Tesoura | 3- Pedra");
			System.out.println("1ºPlayer: Escolha sua Jogada:");
			o1 = in.nextInt();
			System.out.println("2ºPlayer: Escolha sua Jogada:");
			o2 = in.nextInt();
			switch(o1) {
				case 1:
				{
					if(o2==2) {
						System.out.println("Vitória do 2 Jogador");
						p2++;
					}else if(o2==3) {
						System.out.println("Vitória do 1 Jogador");
						p1++;
					}else if(o2==1) {
						System.out.println("Empate");
					}
					break;
				}
				case 2:
				{
					if(o2==1) {
						System.out.println("Vitória do 1 Jogador");
						p1++;
					}else if(o2==2) {
						System.out.println("Empate");
					}else if(o2==3) {
						System.out.println("Vitória do 2 Jogador");
						p2++;
					}
					break;
				}
				case 3:
				{
					if(o2==3) {
						System.out.println("Empate");
					}else if(o2==2) {
						System.out.println("Vitória do 2 Jogador");
						p2++;
					}else if(o2==1) {
						System.out.println("Vitória do 1 Jogador");
						p1++;
					}
					break;
				}
			}
			
		}
		if(p1==2) {
			System.out.println("Jogador 1 Vencedor");
		}else if(p2==2) {
			System.out.println("Jogador 2 Vencedor");
		}
	}

}
