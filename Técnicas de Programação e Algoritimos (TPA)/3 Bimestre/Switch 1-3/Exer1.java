import java.util.Scanner;
public class Exer1 {
	public static void main (String [] args) {
		Scanner in = new Scanner (System.in);
		int id,sn=1;
		do {
			System.out.println("Digite a idade do Aluno");
			id=in.nextInt();
			switch(id){
				case 6:
				{
					System.out.println("Dente de Leite");
					break;
				}
				case 7:
				{
					System.out.println("Júnior");
					break;
				}
				case 8:
				{
					System.out.println("Júnior Max");
					break;
				}
				case 9:
				{
					System.out.println("Júnior Máster");
					break;
				}
				case 10:
				{
					System.out.println("Máster");
					break;
				}
				default:
				{
					System.out.println("Não tem idade para se matricular");
				}
			}
			System.out.println("Deseja continuar? 1=Sim 2=Não");
			sn=in.nextInt();
		}while (sn==1);
	}
}
