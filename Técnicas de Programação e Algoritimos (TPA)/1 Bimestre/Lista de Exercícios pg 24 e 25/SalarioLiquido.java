import java.util.Scanner;
public class SalarioLiquido {
	public static void main(String args[]) {
		double ha,adm,inss,s,d;
		Scanner ler=new Scanner(System.in);
		System.out.println("Digite o valor da hora/aula");
		ha=ler.nextDouble();
		System.out.println("Digite a quantidade de aulas que foram dadas no mes");
		adm=ler.nextDouble();
		System.out.println("Digite o percentual de desconto do INSS");
		inss=ler.nextDouble();
		s=ha+adm;
		d=(s*inss)/100;
		s=s-d;
		System.out.println("O salário líquido é de "+s+"R$.");
				
	}

}
