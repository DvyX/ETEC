import java.util.Scanner;
public class Exercicio6 {
	
	public static void main(String[]args) {
		
		double ve,te,vtd,vm,vjm,vt;
		Scanner ler = new Scanner(System.in);
		System.out.println("Digite o valor a ser emprestado: ");
		ve = ler.nextDouble();
		System.out.println("Digite o número de mêses em que o empréstimo será pago: ");
		te = ler.nextDouble();
		vjm = 2.5*te;
		vtd = (ve*vjm)/100;
		vt = ve+vtd;
		vm = vt/te;
		System.out.println("Valor total: "+vt+"R$/ Valor mensal: "+vm+"R$");
	}

}
