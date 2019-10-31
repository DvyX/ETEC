import java.util.Scanner;
public class Exercicio1 {
	public static void main (String args[]) {
		Scanner ler=new Scanner(System.in);
		int a1,a2,a3,a4,a5,r;
		System.out.println("Digite a idade do primeiro aluno");
		a1=ler.nextInt();
		System.out.println("Digite a idade do segundo aluno");
		a2=ler.nextInt();
		System.out.println("Digite a idade do terceiro aluno");
		a3=ler.nextInt();
		System.out.println("Digite a idade do quarto aluno");
		a4=ler.nextInt();
		System.out.println("Digite a idade do quinto aluno");
		a5=ler.nextInt();
		r=(a1+a2+a3+a4+a5)/5;
		System.out.println("A idade média dos alunos é de "+r);
		
	}
		
}
