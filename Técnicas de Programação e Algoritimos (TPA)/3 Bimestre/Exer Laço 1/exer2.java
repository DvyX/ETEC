import java.util.Scanner;
public class exer2 {
	public static void main(String[]args) {
		Scanner in = new Scanner(System.in);
		int n,i,ni,c;
		i=0;
		do {
			System.out.println("Digite o n�mero secreto:");
			n = in.nextInt();
			while(i<=10){
				if(i<10) {
					i++;
					System.out.println(i+" Tentativa:");
					ni = in.nextInt();
					if(ni==n) {
						System.out.println("Acertou!, na "+i+" tentativa");
						i=i+10;
					}else if(i<10){
						System.out.println("Errou!, tente novamente");
						if(ni>n) {
							System.out.println("O N�mero � menor que isso!");
						}else if(ni<n) {
							System.out.println("O N�mero � maior que isso!");
						}
					}
					
				}else{
					System.out.println("Fim de Jogo");
					System.out.println("O N�mero Era "+n);
					i++;
				}
			}
			System.out.println("Deseja continuar? 1=Sim e 2=N�o");
			c = in.nextInt();
			i=0;
		}while(c==1);
	}

}
