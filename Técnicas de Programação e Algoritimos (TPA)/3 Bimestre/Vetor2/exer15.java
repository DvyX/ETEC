import java.util.Scanner;
public class exer15 {
	public static void main(String[] args) {
		Scanner in =  new Scanner(System.in);
		int f=0,r=0,h=0;
		int a[] = new int[11];
		int b[] = new int[10];
		int c[] = new int[10];
		for (int i=0;i<10;i++) {
			System.out.println("Digite o "+(i+1)+"º valor:");
			a[i] = in.nextInt();
			b[i]=a[i];
			c[i]=a[i];
		}
		for (int i=0;i<10;i++) {
			for (int z=i;(z+1)<10;z++) {
				if (a[h]<a[z]) {
					b[i]=a[h];
					a[z]=a[h];
					h++;
				}
			}
		}
		System.out.print("Crescente:");
		for (int i=0;i<10;i++) {
			System.out.print(b[i]+" ,");
		}
		System.out.print("| Decrescente:");
		for (int i=0;i<10;i++) {
			System.out.print(c[i]+" ,");
		}
	}
}