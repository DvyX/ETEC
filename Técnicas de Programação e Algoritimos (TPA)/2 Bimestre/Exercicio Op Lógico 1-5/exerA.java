import java.util.Scanner;
public class exerA {
	public static void main(String[]args) {
	Scanner ler=new Scanner(System.in);
	double s,r1,r2,r3,r4;
	System.out.println("Digite o salário");
	s=ler.nextDouble();
	if(s<1903.98) {
		System.out.println("Não tem imposto");
	}else if(s>1903.98 && s<2826.66){
		r1=s*7.5/100-142.80;
		System.out.println("R$"+r1);
	}else if(s>2826.65 && s<3751.04){
		r2=s*15/100-354.80;
		System.out.println("R$"+r2);
	}else if(s>3751.05 && s<4664.69){
		r3=s*22.5/100-636.13;
		System.out.println("R$"+r3);
	}else if(s>4664.68){
		r4=s*27.5/100-869.36;
		System.out.println("R$"+r4);
		
	}
	
	}
	
}
