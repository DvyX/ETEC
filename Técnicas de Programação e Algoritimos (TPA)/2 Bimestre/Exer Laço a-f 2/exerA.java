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
		System.out.println("Isso irá levar "+i+" anos, João terá "+j+" Metros de altura e Pedro terá "+p+" Metros de altura");
	}
	
}
