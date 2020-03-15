package Package;

import javax.swing.JOptionPane;

public class Calculo {
	private double numero1;
	private double numero2;
	private double resultado;
	private String[] operacao = {"Soma", "Subtração", "Multiplicação", "Divisão"};
	private int opcao;
	
	public double getNumero1(){
		return numero1;
	}
	
	public void setNumero1(double numero1){
		this.numero1 = numero1;
	}
	
	public String[] getOperacao() {
		return operacao;
	}

	public void setOperacao(String[] operacao) {
		this.operacao = operacao;
	}

	public int getOpcao() {
		return opcao;
	}

	public void setOpcao(int opcao) {
		this.opcao = opcao;
	}

	public double getNumero2(){
		return numero2;
	}
	
	public void setNumero2(double numero2){
		this.numero2 = numero2;
	}
	
	public double getResultado(){
		return resultado;
	}
	
	public void setResultado(double resultado){
		this.resultado = resultado;
	}
	
	public void lerValores() {
		numero1 = Double.parseDouble(JOptionPane.showInputDialog("Digite o 1º valor: "));
		numero2 = Double.parseDouble(JOptionPane.showInputDialog("Digite o 2º valor: "));
	}
	
	public void selecionarOperacao() {
		opcao = JOptionPane.showOptionDialog(null, "Selecione a Operação: ", "Operação", 
				JOptionPane.DEFAULT_OPTION, JOptionPane.INFORMATION_MESSAGE, null, operacao, operacao[0]);
        
		switch(opcao){
		
			case(0):
				somar();
				break;
			case(1):
				subtrair();
				break;
			case(2):
				multiplicar();
				break;
			case(3):
				dividir();
				break;
		}
	}
	
	public void multiplicar() {
		resultado=numero1*numero2;
		apresentar();
	}
	
	public void dividir() {
		resultado=numero1/numero2;
		apresentar();
	}
	
	public void subtrair() {
		resultado=numero1-numero2;
		apresentar();
	}
	
	public void somar() {
		resultado=numero1+numero2;
		apresentar();
	}
	
	public void apresentar() {
		JOptionPane.showMessageDialog(null, String.format("O resultado é :%.2f",resultado));
	}
}
