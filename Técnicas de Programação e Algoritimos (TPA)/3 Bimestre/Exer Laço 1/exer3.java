import java.util.Scanner;
public class exer3 {
	public static void main(String[]args) {
		Scanner in = new Scanner(System.in);
		int i=1,s,q,n,r,lr,xl;
		System.out.println("Quantos querem o lanche?");
		q = in.nextInt();
		if(q<=40) {
			n = 40-q;
			s = n*3;
			if(s==0) {
				System.out.println("N�o sobraram lanches");
			}else {
				System.out.println("Sobraram "+s+" itens ap�s a primeira distribui��o");
				System.out.println("Quantos querem repitir?");
				r = in.nextInt();
				if(r>q) {
					System.out.println("N�o � Poss�vel.");
				}else {
					lr = s/r;
					xl= s%r;
					System.out.println("Cada aluno ficar� com "+lr+" lanches, "+xl+" lanches n�o poder�o ser divididos");
				}
			}
		}else {
			System.out.println("N�o � Poss�vel .-.");
		}
	}
}
