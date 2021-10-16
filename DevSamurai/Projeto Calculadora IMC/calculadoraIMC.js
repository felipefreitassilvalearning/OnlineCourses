import * as React from 'react';
import { Text, View, StyleSheet } from 'react-native';
import { Button, TextInput } from 'react-native-paper';

export default class App extends React.Component {

    state = {
        peso: 0,
        altura: 1,
        imc: 0,
        legenda: 'Indeterminado',
        cor: '#bdc3c7',
    }

    calcularIMC = () => {

        const resultado = this.state.peso
            /
            (this.state.altura * this.state.altura);

        this.setState({
            imc: Math.ceil(resultado)
        });

        if (resultado < 18.5) {
            this.setState({
                legenda: 'Magreza',
                cor: '#e74c3c',
            })
        } else if (resultado >= 18.5 && resultado <= 24.9) {
            this.setState({
                legenda: 'Normal',
                cor: '#2ecc71',
            })
        } else if (resultado >= 25 && resultado <= 29.9) {
            this.setState({
                legenda: 'Sobrepeso',
                cor: '#f1c40f',
            })
        } else if (resultado >= 30 && resultado <= 39.9) {
            this.setState({
                legenda: 'Obesidade',
                cor: '#e67e22',
            })
        } else {
            this.setState({
                legenda: 'Obesidade Grave',
                cor: '#e74c3c',
            })
        }
    }

    render() {
        const legenda = 'Normal';

        return (
            <View style={styles.app}>

                <Text style={styles.legenda}>Seu IMC</Text>

                <View style={[styles.painel, { backgroundColor: this.state.cor }]}>
                    <Text style={styles.resultado}>{this.state.imc}</Text>
                    <Text style={styles.diagnostico}>{this.state.legenda}</Text>
                </View>

                <View>
                    <TextInput
                        style={styles.peso}
                        label="Peso"
                        onChangeText={valor => {
                            this.setState({
                                peso: valor.replace(',', '.')
                            });
                        }} />
                    <TextInput
                        style={styles.altura}
                        label="Altura"
                        onChangeText={valor => {
                            this.setState({
                                altura: valor.replace(',', '.')
                            });
                        }} />
                    <Button
                        mode="contained"
                        onPress={this.calcularIMC}>Calcular</Button>
                </View>

            </View>
        );
    }
}

const styles = StyleSheet.create({
    app: {
        padding: 10,
    },
    legenda: {
        textAlign: 'center',
        fontWeight: 'bold',
    },
    painel: {
        alignSelf: 'center',
        borderRadius: 5,
        width: 150,
        marginVertical: 10,
        padding: 8,
    },
    resultado: {
        textAlign: 'center',
        fontSize: 28,
        fontWeight: 'bold',
    },
    diagnostico: {
        textAlign: 'center',
        fontSize: 16,
    },
    peso: {
        marginVertical: 10,
    },
    altura: {
        marginVertical: 10,
    },
});
