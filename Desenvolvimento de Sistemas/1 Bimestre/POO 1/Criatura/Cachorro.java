package Criatura;

public class Cachorro {

	public static void main(String[] args) {
		Animal cao = new Animal();
		cao.nome = "Pluto";
		cao.idade = 87;
		cao.raca = "Vira-lata";
		
		cao.andando = false;
		cao.correndo = true;
		
		System.out.println("O nome do meu cachorro é "+cao.nome);
		System.out.println("Ele tem "+cao.idade+" anos");
		System.out.println("A raça dele é "+cao.raca);
		cao.caminhar();
		cao.correr();
	}

}
