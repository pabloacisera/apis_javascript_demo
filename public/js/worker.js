let reciviedData = null;

function executeOperation(data) {
    return data.value1 - data.value2;
}

self.onmessage = (event) => {
    console.log("datos recibidos: ", event.data);
    reciviedData = event.data;

    setTimeout(() => {
        self.postMessage({
            success: true,
            result: executeOperation(reciviedData)
        })
    }, 5500);
}

