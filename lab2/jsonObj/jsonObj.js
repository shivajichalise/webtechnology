const mainArray = {
  "problems": [{
    "Diabetes": [{
      "medications": [{
        "medicationsClasses": [{
          "className": [{
            "associatedDrug": [{
              "name": "asprin",
              "dose": "",
              "strength": "500 mg"
            }],
            "associatedDrug#2": [{
              "name": "somethingElse",
              "dose": "",
              "strength": "500 mg"
            }]
          }],
          "className2": [{
            "associatedDrug": [{
              "name": "asprin",
              "dose": "",
              "strength": "500 mg"
            }],
            "associatedDrug#2": [{
              "name": "somethingElse",
              "dose": "",
              "strength": "500 mg"
            }]
          }]
        }]
      }],
      "labs": [{
        "missing_field": "missing_value"
      }]
    }],
    "Asthma": [{}]
  }]
};

if (typeof (mainArray) === 'object' && !Array.isArray(mainArray)) {
  Object.keys(mainArray).forEach((i) => {
    console.log(i);
    let temp = mainArray[i];
    if (Array.isArray(temp)) {
      temp.forEach((j) => {
        Object.keys(j).forEach((k) => {
          console.log(k);
          if (Array.isArray(j[k])) {
            j[k].forEach((l) => {
              if (Object.keys(l).length > 0) {
                Object.keys(l).forEach((m) => {
                  console.log(m);
                  if (Array.isArray(l[m])) {
                    l[m].forEach((n) => {
                      Object.keys(n).forEach((o) => {
                        console.log(o);
                        if (typeof (n[o]) === 'string') {
                          console.log(n[o]);
                        }
                        else if (typeof (n[o]) === 'object') {
                          if (Array.isArray(n[o])) {
                            n[o].forEach((p) => {
                              Object.keys(p).forEach((q) => {
                                if (Array.isArray(p[q])) {
                                  p[q].forEach((r) => {
                                    Object.keys(r).forEach((s) => {
                                      if (Array.isArray(r[s])) {
                                        r[s].forEach((t) => {
                                          Object.keys(t).forEach((u) => {
                                            console.log(u);
                                            if (t[u])
                                              console.log(t[u]);
                                          });
                                        })
                                      }
                                    })
                                  })
                                }
                              });
                            })
                          }
                        }
                      });
                    });
                  }
                });
              }
            });
          }
        });
      });
    }
  });
}
