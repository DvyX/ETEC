import java.util.Scanner;
public class exer1 {
	public static void main (String[]args) {
		Scanner in=new Scanner (System.in);
		double a,i,id,p,s,t,q,im,pp,sp,tp,qp,ids;
		i = 1;
		p = 0;
		s = 0;
		q = 0;
		t = 0;
		ids = 0;
		System.out.println("Digite a quantidade de alunos:");
		a=in.nextDouble();
		while (i<a) {
			System.out.println("Digite a idade do aluno:");
			id = in.nextDouble();
			if(id<15) {
				p++;
			}else if(id>15 && id<=18){
				s++;
			}else if(id>18 && id<=22) {
				t++;
			}else if(id>22) {
				q++;
			}
			ids = ids+id;
			i++;
		}
		im = ids/a;
		pp = p*100/a;
		sp = s*100/a;
		tp = t*100/a;
		qp = q*100/a;
		System.out.println("Idade M�dia: "+im);
		System.out.println("Quantidade de Alunos da 1� Faixa Et�ria: "+p+", que s�o "+pp+"% do total");
		System.out.println("Quantidade de Alunos da 2� Faixa Et�ria: "+s+", que s�o "+sp+"% do total");
		System.out.println("Quantidade de Alunos da 3� Faixa Et�ria: "+t+", que s�o "+tp+"% do total");
		System.out.println("Quantidade de Alunos da 4� Faixa Et�ria: "+q+", que s�o "+qp+"% do total");
	}
}
