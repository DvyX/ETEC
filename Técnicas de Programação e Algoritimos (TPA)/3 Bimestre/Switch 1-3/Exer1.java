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
					System.out.println("J�nior");
					break;
				}
				case 8:
				{
					System.out.println("J�nior Max");
					break;
				}
				case 9:
				{
					System.out.println("J�nior M�ster");
					break;
				}
				case 10:
				{
					System.out.println("M�ster");
					break;
				}
				default:
				{
					System.out.println("N�o tem idade para se matricular");
				}
			}
			System.out.println("Deseja continuar? 1=Sim 2=N�o");
			sn=in.nextInt();
		}while (sn==1);
	}
}
