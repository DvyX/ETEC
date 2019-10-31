import java.util.Scanner;
public class exer3Extra {
	public static void main(String[]args) {
		Scanner in =  new Scanner(System.in);
		int n,d,c=2,f=0;
		int a[] = new int[10];
		int p[] = new int[10];
		for(int i=0;i<10;i++) {
			System.out.println("Digite o "+(i+1)+"º elemento:");
			a[i] = in.nextInt();
			c=2;
			while(c<a[i]) {
				d = a[i]%c;
				if(d!=0) {
					p[f]=a[i];
					f++;
					c=a[i];
				}
				c++;
			}
		}
		for(int i=0;i<10;i++) {
			System.out.println(p[i]);
		}
 	}
}
