import java.util.Scanner;
public class ExerB {
	public static void main(String[]args) {
		Scanner in = new Scanner(System.in);
		int t=1,a=1,n1,n2,nm;
		while(t<=5) {
			while(a<=10) {
				System.out.println("Digite a 1ª Nota do "+a+"º Aluno da "+t+"º Turma");
				n1 = in.nextInt();
				System.out.println("Digite a 2ª Nota do "+a+"º Aluno da "+t+"º Turma");
				n2 = in.nextInt();
				nm = (n1+n2)/2;
				System.out.println("Média: "+nm);
				if(nm<7) {
					System.out.println("Reprovado");
				}else if(nm>=7) {
					System.out.println("Aprovado");
				}
				a++;
			}t++;
			a=1;
		}
	}

}
