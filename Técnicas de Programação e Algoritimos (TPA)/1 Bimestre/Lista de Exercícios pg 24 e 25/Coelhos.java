import java.util.Scanner;
public class Coelhos {
	public static void main(String args[]) {
		double nc,c;
		Scanner ler=new Scanner(System.in);
		System.out.println("Digite o numero de coelhos");
		nc=ler.nextDouble();
		c=(nc*0.70)/18+10;
		System.out.println("O custo de criação é de "+c+"R$.");
//		incompleto :(
	}
}
