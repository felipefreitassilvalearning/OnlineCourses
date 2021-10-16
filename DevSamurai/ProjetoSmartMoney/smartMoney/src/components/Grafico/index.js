/* eslint-disable prettier/prettier */
import React from 'react';
import { View, Text, StyleSheet } from 'react-native';
import Colors from '../../styles/Colors';
import Container from '../Core/Container';
import BalancePanelChart from '../BalancePanel/BalancePanelChart';


const Grafico = () => {
    return (
            <Container title='Balanço patrimonial'>
                <View style={styles.container}>
                <BalancePanelChart />
                </View>
            </Container>
    );
};

const styles = StyleSheet.create({
    container: {
        paddingBottom: 20,
        marginTop: 3,
    },
    component: {
        marginTop: -10,
    },
});

export default Grafico;
 