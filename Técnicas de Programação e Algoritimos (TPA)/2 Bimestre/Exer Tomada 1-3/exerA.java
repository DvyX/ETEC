public class exerA {

	public static void main(String[]args) {
		
		double j,p,i;
		p = 1.45;
		j = 1.34;
		i=0;
		while(p>j) {
			p = p+0.02;
			j = j+0.025;
			i++;
		}
		System.out.println("Isso ir� levar "+i+" anos, Jo�o ter� "+j+" Metros de altura e Pedro ter� "+p+" Metros de altura");
	}
	
}
