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
				System.out.println("Não sobraram lanches");
			}else {
				System.out.println("Sobraram "+s+" itens após a primeira distribuição");
				System.out.println("Quantos querem repitir?");
				r = in.nextInt();
				if(r>q) {
					System.out.println("Não é Possível.");
				}else {
					lr = s/r;
					xl= s%r;
					System.out.println("Cada aluno ficará com "+lr+" lanches, "+xl+" lanches não poderão ser divididos");
				}
			}
		}else {
			System.out.println("Não é Possível .-.");
		}
	}
}
