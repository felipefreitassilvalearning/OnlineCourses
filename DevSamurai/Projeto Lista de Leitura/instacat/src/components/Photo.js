import React, { useState } from 'react';
import { View, Text, TouchableOpacity, Image, StyleSheet } from 'react-native';

const Photo = ({ file, count }) => {
  const [like, setLike] = useState(0);

  const increment = () => {
    setLike(like + 1);
  };

  return (
    <View style={styles.container}>
      <Image source={file} style={styles.image} />

      <TouchableOpacity onPress={increment}>
        <Text>{like} likes</Text>
      </TouchableOpacity>
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
    alignItems: 'center',
    justifyContent: 'center',
  },
  image: {
    height: 180,
    width: 180,
  },
});

export default Photo;
