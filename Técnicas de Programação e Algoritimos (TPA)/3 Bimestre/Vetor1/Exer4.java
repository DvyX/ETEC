import java.util.Scanner;
public class Exer4 {
	public static void main(String[]args) {
		Scanner in = new Scanner(System.in);
		int v[]= new int[7];
		int v2[]= new int[7];
		for(int i=0;i<7;i++) {
			System.out.println("Digite o "+(i+1)+" número");
			v[i] = in.nextInt();
		}
		for(int c=0;c<7;c++) {
			v2[c] = v[c]*2;
		}
		System.out.print("["); 
		for(int b=0;b<7;b++) {
			if(b==6) {
				System.out.print(v2[b]+"]");
			}else {
				System.out.print(v2[b]+" - ");
			}
		}
	}

}
