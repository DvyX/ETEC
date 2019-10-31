import java.util.Scanner;
public class exer3 {
	public static void main(String[]args) {
		int c=0, r=0;
		Scanner in = new Scanner(System.in);
		int a[] = new int[10];
		int b[] = new int[10];
		for(int i=0;i<10;i++) {
			System.out.println("Digite o "+(i+1)+"º valor:");
			a[i] = in.nextInt();
			for (int f=2;f>a[i];f++) {
				if (a[i]%f==0) {
					System.out.println("É um Número Primo!");
					r++;
				}
			}
			System.out.println("Não é um número primo");
			
			}
			
		}
	}