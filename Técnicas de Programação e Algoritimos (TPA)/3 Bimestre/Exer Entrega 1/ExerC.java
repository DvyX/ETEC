import java.util.Scanner;
public class ExerC {
	public static void main(String[]args) {
		Scanner in = new Scanner(System.in);
		String n;
		int c=1,mb=0,b=0,r=0,i=0,a;
		double p;
		System.out.println("Digite o n�mero de alunos:");
		a= in.nextInt();
		while(c<=a) {
			System.out.println("Digite a men��o do "+c+"� aluno:");
			n = in.next();
			switch(n) {
				case "MB":
				case "mb":
				{
					mb++;
					c++;
					break;
				}
				case "B":
				case "b":
				{
					b++;
					c++;
					break;
				}
				case "R":
				case "r":
				{
					r++;
					c++;
					break;
				}
				case "I":
				case "i":
				{
					i++;
					c++;
					break;
				}
				default:
				{
					System.out.println("Nota Invalida, digite as men��es no formato ETEC :)");
				}
			}			
		}
		p = mb*100/a;
		System.out.println("MB: "+p+"%");
		p = b*100/a;
		System.out.println("B: "+p+"%");
		p = r*100/a;
		System.out.println("R: "+p+"%");
		p = i*100/a;
		System.out.println("I: "+p+"%");
	}

}
