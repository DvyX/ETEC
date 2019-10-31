import java.util.Scanner;
public class desafio {
	public static void main(String[]args) {
		int d,m,a,b;
		Scanner in = new Scanner(System.in);
		System.out.println("Digite o dia:");
		d = in.nextInt();
		System.out.println("Digite o mês:");
		m = in.nextInt();
		System.out.println("Digite o ano:");
		a = in.nextInt();
		if(d<=31 || m<=12) {
			if(m==01 || m==03 || m==05 || m==07 || m==8 || m==10) {
				if(d==31){
					d=01;
					m++;
					System.out.println(d+"/"+m+"/"+a);
				}else {
					d++;
					System.out.println(d+"/"+m+"/"+a);
				}
			}else if(m==04 || m==06 || m==9 || m==11 ) {
				if(d==30) {
					d=01;
					m++;
					System.out.println(d+"/"+m+"/"+a);
				}else {
					d++;
					System.out.println(d+"/"+m+"/"+a);
				}
			}else if(m==2) {
				b=a%4;
				if(b==0) {
					if(d==29) {
						d=01;
						m++;
						System.out.println(d+"/"+m+"/"+a);
					}else {
						d++;
						System.out.println(d+"/"+m+"/"+a);
					}
				}else {
					if(d==28) {
						d=01;
						m++;
						System.out.println(d+"/"+m+"/"+a);
					}else if(d>28) {
						System.out.println("Data Inválida");
					}else {
						d++;
						System.out.println(d+"/"+m+"/"+a);
					}
				}
			}else if(m==12) {
				if(d==31) {
					d=01;
					m=01;
					a++;
					System.out.println(d+"/"+m+"/"+a);
				}else {
					d++;
					System.out.println(d+"/"+m+"/"+a);
				}
			}else {
				d++;
				System.out.println(d+"/"+m+"/"+a);
			}
		}else {
			System.out.println("Data Inválida");
		}
	}

}
